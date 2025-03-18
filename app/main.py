from fastapi import FastAPI
from app import endpoints

app = FastAPI(title="Converted PHP API to FastAPI")

# Include routes from endpoints module
app.include_router(endpoints.router)

# Auto-generated docs available at /docs