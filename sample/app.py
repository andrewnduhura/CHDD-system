from flask import Flask, request, jsonify
import pandas as pd
import joblib
from sklearn.compose import make_column_transformer
from sklearn.preprocessing import OrdinalEncoder

app = Flask(__name__)

# Load the trained model
model = joblib.load('chd_model.joblib')

# Create the column transformer for preprocessing
transformer = make_column_transformer(
    (OrdinalEncoder(), ['AgeCategory', 'Race', 'GenHealth']),
    remainder='passthrough'
)

# Load the training data (X_train) from a file
X_train = pd.read_csv('chd_2020_cleaned.csv')

# Fit the transformer on training data
transformer.fit(X_train[['AgeCategory', 'Race', 'GenHealth']])

@app.route('/predict', methods=['POST'])
def predict():
    data = request.json  # Assuming JSON data is sent in the request body
    print("==JSON=data===")
    print(data)

    # Preprocess the input data
    transformed_data = preprocess_data(data)
    print("==transformed=DATA=")
    print(transformed_data)
    # Make predictions using the loaded model
    predictions = model.predict(transformed_data)
    # ttransformed_data_json = transformed_data.to_json(orient='records')
    # predictions_list = predictions.tolist()

    # Convert the predictions to a list and return the JSON response
    response = {'predictions': predictions.tolist()}
    return jsonify(response)
    # response = {'transformed_data': ttransformed_data_json, 'predictions': predictions_list}
    # return jsonify(response)

def preprocess_data(data):
    df = pd.DataFrame(data)
    print("=JSON=here==")

    print(df)

    # Perform the same preprocessing steps as before
    df = df.replace({'Yes': 1, 'No': 0, 'Male': 1, 'Female': 0, 'No, borderline diabetes': '0', 'Yes (during pregnancy)': '1'})

    df['Diabetic'] = df['Diabetic'].astype(int)

    transformed_data = transformer.transform(df[['AgeCategory', 'Race', 'GenHealth']])
    encoded_column_names = [f"{col}_OrdinalEncoder" for col in ['AgeCategory', 'Race', 'GenHealth']]
    transformed_data = pd.DataFrame(transformed_data, columns=encoded_column_names)

    transformed_data.reset_index(drop=True, inplace=True)
    df.reset_index(drop=True, inplace=True)
    transformed_data = pd.concat([transformed_data, df], axis=1)

    transformed_data.drop(['AgeCategory', 'Race', 'GenHealth'], axis=1, inplace=True)

    return transformed_data

if __name__ == '__main__':
    app.run(debug=True)

# OUTPUT
# {
#     "predictions": [
#         1
#     ]
# }
