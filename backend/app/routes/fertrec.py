from fastapi import status, APIRouter
from ..schema import Weather, Fert
from ..deeplearning import fertilizer_recommender

route = APIRouter(tags=['Fertilizer Recommendation'])


@route.post("/fertrec", status_code=status.HTTP_200_OK)
def recommendation(localdata: Fert):
    temperature = localdata.temperature
    humidity = localdata.humidity
    moisture = localdata.moisture
    soil_type = localdata.soil_type.lower()
    crop_type = localdata.crop_type.lower()
    N = localdata.N
    K = localdata.K
    P = localdata.P
    plant_dict = {'barley': 0,
                  'cotton': 1,
                  'ground Nuts': 2,
                  'maize': 3,
                  'millets': 4,
                  'oil seeds': 5,
                  'paddy': 6,
                  'pulses': 7,
                  'sugarcane': 8,
                  'tobacco': 9,
                  'wheat': 10}
    soil_dict = {'black': 0, 'clayey': 1, 'loamy': 2, 'red': 3, 'sandy': 4}

    recommendation = fertilizer_recommender.predict(
        [temperature, humidity, moisture, soil_dict[soil_type], plant_dict[crop_type], N, K, P])
    return {"recommendation": recommendation}
