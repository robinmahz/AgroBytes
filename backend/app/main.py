from fastapi import FastAPI
from .routes import mainpage, plantrec, fertrec
from fastapi.middleware.cors import CORSMiddleware


app = FastAPI()
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],  # Replace with specific origins in production
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)
app.include_router(mainpage.route)
app.include_router(plantrec.route)
app.include_router(fertrec.route)
