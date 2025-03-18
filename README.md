# Converted PHP API to FastAPI

This project demonstrates the process of converting a simple PHP API into a FastAPI application. The project includes creating a PHP API, converting it to FastAPI, deploying the FastAPI application, and submitting both the GitHub repository link and a live deployment URL.

## Overview

-  **PHP API:** A basic API created in PHP with GET and POST endpoints.
-  **FastAPI Conversion:** Re-implementing the PHP API's functionality using FastAPI in Python.
-  **Deployment:** Deploying the FastAPI application (example: using Heroku).
-  **Submission:** Provide the GitHub repository and live URL for evaluation.

## Project Structure

```
my_fastapi_api/
├── app/
│   ├── __init__.py
│   ├── main.py         # Entry point of the FastAPI application
│   └── endpoints.py    # API route definitions
├── index.php           # Original PHP API for reference
├── requirements.txt    # Python dependencies
├── Procfile            # Deployment configuration for Heroku
├── runtime.txt         # (Optional) Specifies Python version
└── README.md           # Project documentation
```

## Requirements

-  **Python 3.7+**
-  **FastAPI**
-  **Uvicorn**
-  **Git** (for version control)
-  **Heroku CLI** (if deploying on Heroku)

## Installation and Setup

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/SauravChaudhary26/shiplee-assignment.git
   cd shiplee-assignment
   ```

2. **Set Up a Virtual Environment and Install Dependencies:**

   ```bash
   python -m venv venv
   source venv/bin/activate  # On Windows: venv\Scripts\activate
   pip install -r requirements.txt
   ```

## Running the FastAPI Application Locally

1. **Start the Application:**

   ```bash
   uvicorn app.main:app --reload
   ```

2. **Access the Endpoints:**

   -  **GET Endpoint:**  
      Open your browser and navigate to [http://127.0.0.1:8000/hello](http://127.0.0.1:8000/hello)

   -  **POST Endpoint:**  
      Use a tool like Postman or `curl`:

      ```bash
      curl -X POST -H "Content-Type: application/json" -d '{"name": "John"}' http://127.0.0.1:8000/data
      ```

3. **API Documentation:**  
   Interactive API docs are available at [http://127.0.0.1:8000/docs](http://127.0.0.1:8000/docs)

## Endpoints

-  **GET /hello:**  
   Returns a greeting message.

   **Response Example:**

   ```json
   {
      "message": "Hello, World from FastAPI!"
   }
   ```

-  **POST /data:**  
   Accepts JSON data and echoes it back.

   **Request Example:**

   ```json
   {
      "name": "John"
   }
   ```

   **Response Example:**

   ```json
   {
      "received": {
         "name": "John"
      }
   }
   ```

## GitHub Repository & Live Link

-  **GitHub Repository:**  
   [https://github.com/SauravChaudhary26/shiplee-assignment.git](https://github.com/SauravChaudhary26/shiplee-assignment.git)

-  **Live URL:**  
   [https://shiplee-assignment.onrender.com](https://shiplee-assignment.onrender.com)

## Conclusion

This project provides a complete guide from building a PHP API to converting it into a FastAPI application and deploying it for public access. Contributions and feedback are welcome.

---

**Author:** Saurav Kumar Chaudhary
