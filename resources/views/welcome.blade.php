<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/planning.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="header">
            <div id="logo">
                <img width="300px" height="100px" src="{{ asset('img/logo.jpg') }}"></img>
            </div>
            <div id="headerContent">
                <p>Login</p>
            </div>
        </div>

        <div id="page">
            <div id="sideBar">
                <div class="menuItem">
                    <div class="menuPhase">
                        <p>Planning</p>
                    </div>
                    <div class="menuTasks">
                        <p><a href="">Elicitate Performance Requirements</a></p>
                        <p><a href="">Analyze Performance Requirements</a></p>
                        <p><a href="">Specify Performance Requirements</a></p>
                        <p><a href="">Identify User Profiles</a></p>
                        <p><a href="">Identify Key Scenarios</a></p>
                        <p><a href="">Determine Distribution of User Activities</a></p>
                        <p><a href="">Plan Test Design</a></p>
                        <p><a href="">Identify the Test Environment</a></p>
                        <p><a href="">Choose Tool</a></p>
                        <p><a href="">Choose Method</a></p>
                    </div>
                </div>
                <div class="menuItem">
                    <div class="menuPhase">
                        <p>Design</p>
                    </div>
                </div>
                <div class="menuItem">
                    <div class="menuPhase">
                        <p>Configuration</p>
                    </div>
                </div>
                <div class="menuItem">
                    <div class="menuPhase">
                        <p>Execution</p>
                    </div>
                </div>
                <div class="menuItem">
                    <div class="menuPhase">
                        <p>Monitoring</p>
                    </div>
                </div>
                <div class="menuItem">
                    <div class="menuPhase">
                        <p>Analysis</p>
                    </div>
                </div>
                <div class="menuItem">
                    <div class="menuPhase">
                        <p>Reporting</p>
                    </div>
                </div>
            </div>
            <div id="content">
                Content
            </div>
        </div>

        <!-- <div class="container">
            <div class="sidebar">
                <div class="logo">
                    <img src="{{ asset('img/logo.png') }}"></img>
                </div>
                <div class="menu">
                    TESTE
                </div>
            </div>
            <div class="page">
                asdasd
            </div>
        </div> -->
    </body>
</html>
