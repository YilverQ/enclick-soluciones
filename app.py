from flask import Flask
from flask import render_template, redirect, url_for
from model import *

app = Flask("__main__")


@app.route("/")
def index():
	return render_template("index.html", title = "Inicio")


@app.route("/productos")
@app.route("/producto/<string:producto>")
def producto_build(producto):
	return "Página de productos en construcción."


@app.route("/servicios")
@app.route("/servicio/<string:servicio>")
def servicios_build(servicio):
	return "Página de servicios en construcción."


@app.route("/contacto")
def contacto():
	return "contacto"


@app.route("/eventos")
@app.route("/evento/<string:evento>")
def evento():
	return "Página de eventos en construcción."


if __name__ == '__main__':
	app.run(debug=True, port = 5000)
	#host 192.168.43.7
