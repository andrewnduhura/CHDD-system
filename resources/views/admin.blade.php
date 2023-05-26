@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->

<div>
    <h1 style="text-align:center;color:black">CORONARY HEART DISEASE DIAGNOSIS
    </h1>

    <style>
    .form-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .form-column {
        flex: 1 1 50%;
        padding: 10px;
    }

    .form-row {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .form-label {
        flex: 0 0 35%;
        text-align: right;
        margin-right: 5px;
    }

    .form-input {
        flex: 0 0 65%;
        width: 50%;
    }

    .form-submit {
        text-align: center;
        padding: 10px;
    }
</style>

<form method="get" action="/diagnose">
    <div class="form-container">
        <div class="form-column">
                    <div class="form-row">
                <label for="age" class="form-label">AGE:</label>
                <input type="number" class="form-input" id="age" name="age"  required>
            </div>
            <div class="form-row">
                <label for="bmi" class="form-label">BMI:</label>
                <input type="number" class="form-input" step="any" id="bmi" name="bmi"  required>
            </div>
            <div class="form-row">
                <label class="form-label" for="alcoholConsumption">Alcohol Drinking:</label>
                <select class="form-input" id="alcoholConsumption">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-row">
                <label class="form-label" for="asthma">Asthma:</label>
                <select class="form-input" id="asthma">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-row">
                 <label for="physicalHealth" class="form-label">Physical Health:</label>
                <input type="number" class="form-input" id="physicalHealth" name="physicalHealth" style="width: 100px" required>
            </div>

            <div class="form-row">
                <label class="form-label" for="age">Age Category:</label>
                <select class="form-input" id="age">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Option 3">Option 3</option>
                </select>
            </div>
            <div class="form-row">
                <label class="form-label" for="difficultyWalking">Difficult Walking:</label>
                <select class="form-input" id="difficultyWalking">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Option 3">Option 3</option>
                </select>
            </div>
            <div class="form-row">
                <label class="form-label" for="diabetes">Diabetic:</label>
                <select class="form-input" id="diabetes">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Option 3">Option 3</option>
                </select>
            </div>
            <div class="form-row">
                <label class="form-label" for="kidneyDisease">Kidney Disease:</label>
                <select class="form-input" id="kidneyDisease">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Option 3">Option 3</option>
                </select>
            </div>
        </div>

        <div class="form-column">
            <div class="form-row">
                <label class="form-label" for="skinCancer">Skin Cancer:</label>
                <select class="form-input" id="skinCancer">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Option 3">Option 3</option>
                </select>
            </div>
            <div class="form-row">
                <label class="form-label" for="hypertension">Stroke:</label>
                <select class="form-input" id="hypertension">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Option 3">Option 3</option>
                </select>
            </div>

            <div class="form-row">
                <label class="form-label" for="smoking">Smoking:</label>
                <select class="form-input" id="smoking">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Option 3">Option 3</option>
                </select>
            </div>

            <div class="form-row">
                <label class="form-label" for="sex">Sex:</label>
                <select class="form-input" id="sex">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Option 3">Option 3</option>
                </select>
            </div>

            <div class="form-row">
                <label class="form-label" for="health">General health:</label>
                <select class="form-input" id="health">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Option 3">Option 3</option>
                </select>
            </div>
            <div class="form-row">
                <label for="hoursOfSleep"class="form-label" >Sleep Time:</label>
                <input class="form-input" type="number" id="hoursOfSleep" name="hoursOfSleep" style="width: 100px" required>
            </div>
            <div class="form-row">
            	<label for="mentalHealth" class="form-label">Mental Health:</label>
                <input type="number"  id="mentalHealth" name="mentalHealth" class="form-input"style="width: 100px" required>
            </div>
            <div class="form-row">
                 <label for="physicalActivity" class="form-label">Physical Activity:</label>
                <input type="number" class="form-input" id="physicalActivity" name="physicalActivity" style="width: 100px" required>
            </div>
            </div>
        </div>
    </div>

    <div class="form-submit">
        <input type="submit" value="Diagnose">
    </div>
</form>
</div>
  <!-- /.content-wrapper -->
  @endsection