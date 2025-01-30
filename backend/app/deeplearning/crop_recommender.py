import numpy as np
import joblib
import os

# Load the saved model
model_path = os.path.join(os.getcwd(),'app', 'deeplearning', 'crop.pkl')
loaded_model = joblib.load(model_path)

def predict(data):
    # Prepare the data (replace these values with your input)
    data_to_predict = data

    # Convert the data to a 2D array (1 row, number of features columns)
    data_to_predict = np.array(data_to_predict).reshape(1, -1)

    # Make predictions
    return loaded_model.predict(data_to_predict)[0]

  
if __name__ == "__main__":
    # Test the function with a sample input
    prob_dict = predict([85,38,41,21.58711777,82.7883708,6.2490506560000005,276.65524589999995])
    print(prob_dict)

