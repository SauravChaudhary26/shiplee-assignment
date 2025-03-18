from fastapi import APIRouter, Request
from pydantic import BaseModel

router = APIRouter()

# GET endpoint: equivalent to index.php?action=hello
@router.get("/hello")
def get_hello():
    return {"message": "Hello, World from FastAPI!"}

# POST endpoint: receives JSON and echoes it back
class DataModel(BaseModel):
    name: str = None  # Adjust fields as needed

@router.post("/data")
async def post_data(item: DataModel):
    # Mimic the PHP behavior by echoing back the received JSON
    return {"received": item}
