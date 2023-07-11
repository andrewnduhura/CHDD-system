from flask import Flask, request, jsonify
import pandas as pd
import joblib
from sklearn.compose import make_column_transformer
from sklearn.preprocessing import OrdinalEncoder
from sklearn.pipeline import make_pipeline
from sklearn.impute import SimpleImputer
from sklearn.ensemble import HistGradientBoostingClassifier

app = Flask(__name__)

# Define or load the training data (replace with your actual data)
X_train = pd.read_csv('chd_2020_cleaned.csv')
# Load the trained model
model = joblib.load("chd_model.joblib")
print('Model loaded')

# Load the trained transformer
transformer = make_column_transformer(
    (OrdinalEncoder(), ['AgeCategory', 'Race', 'GenHealth']),
    remainder='passthrough'
)
# Load the trained transformer
transformer = make_column_transformer(
    (OrdinalEncoder(), ['AgeCategory', 'Race', 'GenHealth']),
    remainder='passthrough'
)

# Fit the transformer with the training data
transformer.fit(X_train[['AgeCategory', 'Race', 'GenHealth']])

# Define a route for prediction
@app.route('/predict', methods=['POST'])
def predict():
    try:
        # Get the input data from the request
        input_data = request.json

        # Convert input data to a DataFrame
        df = pd.DataFrame(input_data)

        # Clean the input data using replace() method
        df = df.replace({'Yes': 1, 'No': 0, 'Male': 1, 'Female': 0, 'No, borderline diabetes': 0, 'Yes (during pregnancy)': 1})

        # Encode categorical columns using the fitted transformer
        transformed_data = transformer.transform(df[['AgeCategory', 'Race', 'GenHealth']])
        encoded_column_names = [f"{col}_OrdinalEncoder" for col in ['AgeCategory', 'Race', 'GenHealth']]
        transformed_data = pd.DataFrame(transformed_data, columns=encoded_column_names)

        # Concatenate the encoded data with the original input data
        df.reset_index(drop=True, inplace=True)
        transformed_data.reset_index(drop=True, inplace=True)
        df = pd.concat([transformed_data, df], axis=1)

        # Remove old categorical columns from the input data
        df.drop(['AgeCategory', 'Race', 'GenHealth'], axis=1, inplace=True)

        # Make predictions using the trained model
        # Get predicted class labels for disease (e.g., heart disease)
        predicted_class = model.predict(df)[0]

        # Convert predicted class label to binary value (0 or 1)
        # predicted_class_binary = 1 if predicted_class == 'Yes' else 
        response = {'predictions': predicted_class.tolist()}
        return jsonify(response)


        # Return the predicted class label as the single output
        return str(predicted_class_binary)

    except Exception as e:
        # Handle any errors that occur during prediction
        error = str(e)
        return f"Error: {error}"

if __name__ == '__main__':
    app.run(debug=True)
# OUTPUT
# {
#     "predictions": 1
# }