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
    
    ### APP VERSION ###

    app_version = "3.0.0-beta"

    ### APP ROUTES ###

    # Index

    @app.route('/index')
    @app.route('/index.html')
    @app.route('/index.php')
    @app.route('/')
    def index():
        return render_template("/index.html")
        
    # Login

    @app.route('/login.html')
    @app.route('/login')
    def login_page(app_version=app_version):
        return render_template("/login.html", app_version=app_version)

    # Simulator Home

    @app.route('/home.html')
    @app.route('/home')
    def home_page():
        return render_template("/home.html")

    # About

    @app.route('/about.html')
    @app.route('/about')
    def about_page(app_version=app_version):
        return render_template("/about.html", app_version=app_version)

    
    # Settings

    @app.route('/settings.html')
    @app.route('/settings')
    def settings_page(app_version=app_version):
        return render_template("/settings.html", app_version=app_version)
    
    
    # JavaScript Disabled
    
    @app.route('/javascript_disabled.html')
    def js_disabled():
        return render_template("/javascript_disabled.html")
    
    return app