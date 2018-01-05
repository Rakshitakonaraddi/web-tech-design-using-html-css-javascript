<?php
session_start();

?>
<html>
    <head>
        <style>
            //Fonts-
            @font-face{
                font-family: pllogo;
                src:url("Barclays Premier League.ttf");
            }
            @font-face{
                font-family: menuf;
                src:url("StratumNo1 Regular.ttf");
            }
             @font-face{
                font-family: menufb;
                src:url("StratumNo1 Medium.ttf");
            }
            #header{
               background-color: #1A1F21;
               // background: -webkit-linear-gradient(right,#C04848,#480048);
                width: 100%;
                height:70px;
                top:0px;
               // margin-top: -10px;
                margin-left: -10px;
                margin-right: -10px;
                
                position: fixed;
                z-index: 3;
            }
            #logopl{
                font-family: menuf;
                position: fixed;
                top:-10px;
                left:110px;
                
                font-size: 30px;
                
            }
            #menu{
                font-family: menuf;
                position: fixed;
                top:30px;
                right:30px;
                margin-left:400px;
                line-height: 1.8px;
                margin-top: 6px;
                font-size: 18px;
                text-decoration: none;
               
            }
            a{
                text-decoration: none;
            }
            #m1{
                padding:40px 40px 8px;
            }
            #m2{
               padding:40px 40px 8px;
                
            }
            #m3{padding:40px 40px 8px;}
            body{
        background-color: #22292C;
            }
            #main{
                height:450px;
               // background-color: aquamarine;
               margin-left: -10px;
                margin-right: -10px;
                margin-top: 70px;
                z-index: -1
                
            }
            #pl-info{
                width:400px;
                height: 300px;
                top:110px;
                position:absolute;
                padding:30px;
                margin-left: 60px;
                z-index: 1;
                font-family: menuf;
                font-size: 20px;
                background-color: #1A1F21;
            }
            #pl-wins{
                width:400px;
                height: 300px;
                top:110px;
                right:0px;
                position:absolute;
               padding:30px;
                right: 60px;
                z-index: 1;
                font-family: menuf;
                font-size: 20px;
                background-color: #1A1F21;
                
            }
            /*table{
                border:5px solid white;
                    padding:30px;
                
            }*/
            table,th,td{
                padding:15px;
                width:400px;
                border:5px solid white;
                border-collapse: collapse;
                margin-top:5px;
            }
            #plwt{
                margin-top: 10px;
                font-family: menuf;
            }
           
            #sisup{
                border-style: solid;
                border-color:rgb(4,245,255);
                padding: 5px;
               top:280px;
                padding-bottom: 2px;
                //border-radius: 10px;
                position: absolute;
                left: 300px;
                border-bottom-style: solid;
                border-width:5px;
                text-shadow: 5px px rgb(56,0,60);
                font-size: 30px;
            }
            #sisup1{
                border-style: solid;
                border-color:rgb(4,245,255);
                padding: 5px;
               top:280px;
                padding-bottom: 2px;
               // border-radius: 10px;
                position: absolute;
                left: 30px;
                border-bottom-style: solid;
                border-width:5px;
                text-shadow: 5px px rgb(56,0,60);
                font-size: 30px;
            }
            #log{
                position: absolute;
                top:250px;
                left:130px;
                color: white;
            }
            #na{
                background: rgb(12,15,16);
                    
          
                font-size: 20pt;
                padding-left: 15px;
                position: absolute;
                top:0px;
                left:0px;
                width: 445px;
            }
                 #chel{
                position: relative;
                margin-left: -10px;
                //margin-right: 1000px;
                 padding-top: 10px;
                padding-left: 15px;  
                      background: -webkit-linear-gradient(right, rgb(3,70,148), #243b55);
                margin-top: 0px;
            }
            #chelt{
                position: absolute;
                top: 30px;
                left:350px;
                font-family: menuf;
                font-size: 18pt;
            }
            #chelb{
                border-style: solid;
                border-color:white;
                padding: 10px;
                padding-top: 2px;
                padding-bottom: 2px;
                border-radius: 10px;
                position: absolute;
                right: 90px;
                top:200px;
                border-bottom-style: solid;
                border-width:5px;
                text-shadow: 5px px rgb(56,0,60);
                font-size: 40px;
            }
             #manu{
                position: relative;
                margin-left: -10px;
                //margin-right: 1000px;
                padding-left: 15px;
                background: -webkit-linear-gradient(left, #e52d27, #b31217);
                margin-top: 5px;
            }
            #manut{
                position: absolute;
                top: 30px;
                left:350px;
                font-family: menuf;
                font-size: 18pt;
            }
            #manub{
                border-style: solid;
                border-color:white;
                padding: 10px;
                padding-top: 2px;
                padding-bottom: 2px;
                border-radius: 10px;
                position: absolute;
                right: 90px;
                top:200px;
                border-bottom-style: solid;
                border-width:5px;
                text-shadow: 5px px rgb(56,0,60);
                font-size: 40px;
            }
            
            
            
               #arsen{
                position: relative;
                margin-left: -10px;
                //margin-right: 1000px;
                 padding-top: 10px;
                padding-left: 15px;  
                   background: -webkit-linear-gradient( right, #000000, rgb(34,41,44));
                margin-top: 0px;
            }
            #arsent{
                position: absolute;
                top: 30px;
                left:350px;
                font-family: menuf;
                font-size: 18pt;
            }
            #arsenb{
                border-style: solid;
                border-color:white;
                padding: 10px;
                padding-top: 2px;
                padding-bottom: 2px;
                border-radius: 10px;
                position: absolute;
                right: 90px;
                top:200px;
                border-bottom-style: solid;
                border-width:5px;
                text-shadow: 5px px rgb(56,0,60);
                font-size: 40px;
            }
            
        </style>
    </head>
    <body>
     
    <div id="header">
        <img src="PL_Logo_W.png" style="width:auto;height:60px;margin-top:-1px;margin-left:60px;">
        <div id="logopl"><p style="color:#FFFFFF;font-family: menuf;">PREMIER LEAGUE</p></div>
        <div id="menu">
            <a style="color:#FFFFFF;" id="m1" href="homepage2.php">HOME</a>
            <a style="color:#FFFFFF;" id="m1" href="contactus1.html">ABOUT US</a>
            <a style="color:#FFFFFF;" id="m1" href="homepage.html">LOGOUT</a>
            
            
        </div>
        </div> 
        <div id="main">
        <img style="height: 400px;width:auto; display: block;margin: auto; align-content: center;" src="PL_Logo_Vertical_RGB_HR-web1.png">
            <div id="pl-info" onclick="window.location='https://en.wikipedia.org/wiki/Premier_League';"><p style="color:white;">The Premier League is an English professional league for men's association football clubs. At the top of the English football league system, it is the country's primary football competition. Contested by 20 clubs, it operates on a system of promotion and relegation with the English Football League (EFL; known as "The Football League" before 2016–17). Welsh clubs that compete in the English football league system can also qualify.</p></div>
            <div id="pl-wins">
                <div id="na"><p style="color:white;">Welcome Football Fans!</p></div>
                <p style="color:white;font-size:50pt;"> Hi <?php  echo '<span style="font-size: 50pt;color:white;">' . $_SESSION['fname'] . "  ".$_SESSION['lname'] .'</span>';   ?> </p>
                         <a style="color:white;"id="sisup" href="homepage.html" >LOGOUT</a>   
                 <a style="color:white;"id="sisup1" href="View-Profile.php" >MY PROFILE</a>   
                
            </div>
        </div>
                <div id="manu"><img src="manu-logo.png" style="width:300px;height: auto;">
        <div id="manut">
            <p style="color:white;">Manchester United Football Club is a professional football club based in Old Trafford, Greater Manchester, England, that competes in the Premier League, the top flight of English football. Nicknamed "the Red Devils", the club was founded as Newton Heath LYR Football Club in 1878, changed its name to Manchester United in 1902 and moved to its current stadium, Old Trafford, in 1910.</p>
             <a style="color:white;"id="manub" href="" >READ MORE</a>
            </div>
        </div>
          <div id="chel"><img src="chelsea-logo.png" style="width:300px;height: auto;">
        <div id="chelt">
            <p style="color:white;">Chelsea Football Club is a professional football club based in London, UK that competes in English Premier League, of which they are reigning champions. Founded in 1905, the club's home ground since then has been Stamford Bridge in Fulham. Wikipedia</p>
             <a style="color:white;"id="chelb" href="" >READ MORE</a>
            </div>
        </div>
          <div id="arsen"><img src="arsenal-logo.png" style="width:300px;height: auto;">
        <div id="arsent">
            <p style="color:white;">Chelsea Football Club is a professional football club based in London, UK that competes in English Premier League, of which they are reigning champions. Founded in 1905, the club's home ground since then has been Stamford Bridge in Fulham. Wikipedia</p>
             <a style="color:white;"id="arsenb" href="" >READ MORE</a>
            </div>
        </div>
        
           <script>
      /*  var m=document.getElementById("main");
        m.addEventListener("mouseover",changem,false);
                m.addEventListener("mouseout",changem1,false);
        function changem()
               {
                  document.getElementById("main").setAttribute("style","background: ");
                  m=document.getElementById("main");
                   m.getElementsByTagName("img")[0].setAttribute("src","PL_Logo_Vertical_RGB_HR-web2.png");
               }
               function changem1()
               {
                  document.getElementById("main").setAttribute("style","background-color:#22292C");
                  m=document.getElementById("main");
                   m.getElementsByTagName("img")[0].setAttribute("src","PL_Logo_Vertical_RGB_HR-web1.png");
               }*/
              /* var p=document.getElementById("pl-info");
        p.addEventListener("mouseover",changet,false);
                p.addEventListener("mouseout",changet1,false);
        function changet()
               {
                  document.getElementById("pl-info").setAttribute("style","background: -webkit-linear-gradient(left,#DA22FF,#9733EE);");
                  
               }
               function changet1()
               {
                  document.getElementById("pl-info").setAttribute("style","background-color:#1A1F21");
                  
               }
                var q=document.getElementById("pl-wins");
    q.addEventListener("mouseover",changeq,false);
                q.addEventListener("mouseout",changeq1,false);
        function changeq()
               {
                  document.getElementById("pl-wins").setAttribute("style","background: -webkit-linear-gradient(left,#7F00FF,#E100FF);");
                  
               }
               function changeq1()
               {
                  document.getElementById("pl-wins").setAttribute("style","background-color:#1A1F21");
                  
               }
               */
               var manu=document.getElementById("manu");
    manu.addEventListener("mouseover",changemanu,false);
                manu.addEventListener("mouseout",changemanu1,false);
        function changemanu()
               {
                  //document.getElementById("manu").setAttribute("style","background: -webkit-linear-gradient(left, #870000, #190a05); ");
                    
               
               }
               function changemanu1()
               {
                  document.getElementById("manu").setAttribute("style"," background: -webkit-linear-gradient(left, #e52d27, #b31217);");
                     
                  
               }
               
               var si=document.getElementById("sisup");
    si.addEventListener("mouseover",changesi,false);
                
                si.addEventListener("mouseout",changesi1,false);
        function changesi()
               {
                 // document.getElementById("sisup").setAttribute("style","");
                    document.getElementById("sisup").setAttribute("style","color:white;background-color:rgb(4,245,255);");
                    
               
               }
               function changesi1()
               {
                  document.getElementById("sisup").setAttribute("style","background-color:");
                    document.getElementById("sisup").setAttribute("style","color:white;");
                  
               }
               
               
               
               var sii=document.getElementById("sisup1");
    sii.addEventListener("mouseover",changesii,false);
                
                sii.addEventListener("mouseout",changesii1,false);
        function changesii()
               {
                 // document.getElementById("sisup").setAttribute("style","");
                    document.getElementById("sisup1").setAttribute("style","color:white;background-color:rgb(4,245,255);");
                    
               
               }
               function changesii1()
               {
                  document.getElementById("sisup1").setAttribute("style","background-color:");
                    document.getElementById("sisup1").setAttribute("style","color:white;");
                  
               }
               
               
               
               
               
               
               var mb=document.getElementById("manub");
    mb.addEventListener("mouseover",changemb,false);
                
                mb.addEventListener("mouseout",changemb1,false);
        function changemb()
               {
                
                    document.getElementById("manub").setAttribute("style","color:white;background-color:rgb(255,230,0);border-color:rgb(181,19,24);color:rgb(181,19,24);");
                    
               
               }
               function changemb1()
               {
                  document.getElementById("manub").setAttribute("style","background-color:");
                    document.getElementById("manub").setAttribute("style","color:white;");
                  
               }
          
               
               
               
                var cb=document.getElementById("chelb");
    cb.addEventListener("mouseover",changecb,false);
                
                cb.addEventListener("mouseout",changecb1,false);
        function changecb()
               {
                
                    document.getElementById("chelb").setAttribute("style","color:white;background-color:rgb(209,211,212);border-color:rgb(3,70,148);color:rgb(3,70,148);");
                    
               
               }
               function changecb1()
               {
                  document.getElementById("chelb").setAttribute("style","background-color:");
                    document.getElementById("chelb").setAttribute("style","color:white;");
                  
               }
          
               
               
               
               
                var ar=document.getElementById("arsenb");
    ar.addEventListener("mouseover",changear,false);
                
                ar.addEventListener("mouseout",changear1,false);
        function changear()
               {
                
                    document.getElementById("arsenb").setAttribute("style","color:white;background-color:rgb(219,0,7);border-color:rgb(4,5,6);color:rgb(4,5,6)");
                    
               
               }
               function changear1()
               {
                  document.getElementById("arsenb").setAttribute("style","background-color:");
                    document.getElementById("arsenb").setAttribute("style","color:white;");
                  
               }
          
               
               
               
               
        </script>
    </body>
</html>