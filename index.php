

         <!DOCTYPE html>
         <html lang="en" dir="ltr">
           <head>
             <meta charset="utf-8">
             <link rel="stylesheet" href="style.css">
             <title>watch</title>
             <style media="screen">
             .watch h1{
               width: 50%;
               background-color: #4CAF50;
               text-align: center;
               padding: 30px;
               border: solid 2px lightblue;
               font-size: 80px;
               border-radius: 10px;
               margin-top: 100px;
               border-sizing:border-box;
               font-family: cursive;
               color: white;
             }
             </style>
           </head>
           <body>
             <div class="watch">
               <h1 id='time'></h1>
             </div>
             <script>
             function watch(){
             var heading=document.getElementById('time');
             var time=new Date();
             var hour=time.getHours();
             var minute=time.getMinutes();
             var second=time.getSeconds();

             if( hour>11){
                ap='pm';
             }
             else{
                ap='am';
             }
             heading.innerHTML=hour +' :' + minute +' : '+ second + ap;
            }
            setInterval(watch,1000);
             </script>
           </body>
         </html>
