from flask import  Flask, escape, redirect
app = Flask(__name__)
@app.route('/')
def index():
     return "hello"

if __name__ == '__main__':
    app.run()