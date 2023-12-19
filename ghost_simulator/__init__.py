import os

from flask import *


def create_app(test_config=None):
    # create and configure the app
    app = Flask(__name__, instance_relative_config=True,  
            static_folder='static',
            template_folder='templates')

    if test_config is None:
        # load the instance config, if it exists, when not testing
        app.config.from_pyfile('config.py', silent=True)
    else:
        # load the test config if passed in
        app.config.from_mapping(test_config)

    # ensure the instance folder exists
    try:
        os.makedirs(app.instance_path)
    except OSError:
        pass
    
    ### APP ROUTES ###

    # Index

    @app.route('/index')
    @app.route('/index.html')
    @app.route('/index.php')
    @app.route('/')
    def index():
        return 'Hello, World!'
        
    # Login

    @app.route('/login.html')
    @app.route('/login')
    def login_page():
        return render_template("/login.html")

    # Simulator Home

    @app.route('/home.html')
    @app.route('/home')
    def home_page():
        return render_template("/home.html")

    # About

    @app.route('/about.html')
    @app.route('/about')
    def about_page():
        return render_template("/about.html")
    
    
    
    
    
    return app