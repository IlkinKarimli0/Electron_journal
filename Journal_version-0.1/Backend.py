from flask import Flask,render_template;

WebPage = Flask(__name__)

@WebPage.route('/')
def studentmain():
    return render_template("login.html")


if (__name__=="__main__"):
    WebPage.run(debug=True);
