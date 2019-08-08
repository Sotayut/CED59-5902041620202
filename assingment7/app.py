from flask import Flask,render_template

app = Flask(__name__)


@app.route('/')
def hello_world():
    return render_template('form.html')
@app.route('/', methods=["POST"])
def chack():
    return 'Welcome to page...'
@app.route('/', methods=["POST"])
def h2():
    return 'xyz';

if __name__ == '__main__':
    app.run()
