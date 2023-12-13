# app.py
# Secret is fake

from flask import (
    Flask, 
    render_template, 
    session,
    redirect,
    request,
    url_for,
)

app = Flask(__name__)
app.secret_key = "f78c8c63eacaf7570f440166bd30c43ad6ad0808a76770f08ae9038f0a81ced8"

PLACEHOLDER_CODE = "print('Hello, World!')"

@app.route("/", methods=["GET"])
def code():
    if session.get("code") is None: 
        session["code"] = PLACEHOLDER_CODE
    lines = session["code"].split("\n")
    context = {
        "message":  "Check your Python Code",
        "code": session["code"],
        "num_lines": len(lines),
        "max_chars": len(max(lines, key=len))
    }
    return render_template("code_input.html", **context)

@app.route("/save_code", methods=["POST"])
def save_code():
    session["code"] = request.form.get("code")
    return redirect(url_for("code"))

@app.route("/reset_session", methods=["POST"])
def reset_session():
    session.clear()
    session["code"] = PLACEHOLDER_CODE
    return redirect(url_for("code"))