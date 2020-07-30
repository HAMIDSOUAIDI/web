<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Resources -->
    <link rel="icon" href="https://i.ibb.co/w6K9r3y/coronavirus-2019.jpg" type="image/x-icon">
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/maps.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
<script src="https://covid.amCharts.com/data/js/world_timeline.js"></script>
<script src="https://covid.amCharts.com/data/js/total_timeline.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://kit.fontawesome.com/f300a501c9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="homestyle.css?version=51">
    <script src="main.js"></script>

    <title>Coronavirus</title>
    <style>
      


    </style>
   
    
</head>

<body>
    <header>
        <h1>Coronavirus</h1>
        <div class="navbar">
            <ul>
                <li><a  href="home.php">World wide</a></li>
                <li><a  href="symptoms.php">Symptoms</a></li>
                <li><a  href="prevent.php">prevention</a></li>
                <li><a  href="about.php">About us</a></li>
                <li> 
                    <form autocomplete="off" action="/action_page.php">
  <div class="autocomplete" style="width:300px;">
    <input id="myInput" type="text" name="myCountry" placeholder="Country">
  </div>
                                <i class="fas fa-search" onclick="heh()"></i>
</form></li>
            <!--   <li class="log">login</li>
               <li class="join">join</li>-->
            </ul>
        </div>

    </header>
<article>
    <div class="alllist">
            <div id="list">
                <div class="cases">
                    <div id="tcases"></div>
                    <label for="">today Cases</label>

                </div>
            </div>
            <div id="list">
                <div class="Recivered">
                    <div id="trecovered"></div>
                    <label for="">today Recivered</label>
            
                </div>
            </div>
            <div id="list">
                <div class="deaths">
                    <div id="tdeaths"></div>
                    <label for="">today Deaths</label>

                </div>
            </div>
           
            <div id="list">
                <div class="cases">
                    <div id="cases"></div>
                    <label for="">Total cases</label>

                </div>
            </div>
            <div id="list">
                <div class="Recivered">
                    <div id="recovered"></div>
                    <label for="">Recivered</label>
            
                </div>
            </div>
            <div id="list">
                <div class="deaths">
                    <div id="deaths"></div>
                    <label for="">Total Deaths</label>

                </div>
            </div>
           
        </div>
    </article>
    <article class="maping">
    <div ><h2>World wide</h2>
<div id="chartdiv">



</div>

</div>
<div>
        <div id="list2">
<img src="https://i.ibb.co/YdN6z6Y/images-removebg-preview.png" alt="" srcset="">         
   <div class="cases">
                <div id="tcases2"></div>
                <label for="">Currently Infected Patients</label>
        
            </div>
        </div>
        <div id="list2">
<img src="https://i.ibb.co/G3LBxcb/lungs-icon-2.png" alt="" srcset="">          
  <div class="Recivered">
                <div id="trecovered2"></div>
                <label for="">in mild condition</label>
        
            </div>
        </div>
        <div id="list2">
            <img src="https://i.ibb.co/7KgvM4s/protection-mask.png" alt="" srcset="">
            <div class="deaths">
                <div id="infected"></div>
                <label for="">in serious condition</label>
        
            </div>
        </div>
</div>
    </article>
    <footer class="page-footer font-small special-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container footerdiv">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item ">
                    <a class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus-g"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-youtube mx-1">
                        <i class="fab fa-youtube"> </i>
                    </a>
                </li>
            </ul>

        </div>

        <div class="footer-copyright text-center py-3">&copy; 2020 CoronaVarus . All Rights Reserved
        </div>

    </footer>
     <script>
            var request2 = new XMLHttpRequest()
        request2.open('GET', 'https://corona.lmao.ninja/v2/all ', true)
        request2.onload = function () {
            // Begin accessing JSON data here
            var data = JSON.parse(this.response)
            //      coun.innerText = data.country;
            if (request2.status >= 200 && request2.status < 400) {
                document.getElementById("cases").innerHTML = data.cases;
                document.getElementById("tcases").innerHTML = data.todayCases;
                                document.getElementById("tcases2").innerHTML = data.cases;

                document.getElementById("tdeaths").innerHTML = data.todayDeaths;
                document.getElementById("deaths").innerHTML = data.deaths;
                document.getElementById("trecovered").innerHTML = data.todayRecovered;
                          
                document.getElementById("recovered").innerHTML = data.recovered;
                document.getElementById("trecovered2").innerHTML = data.recovered;

                var x = parseInt(data.cases, 10);
                var y = parseInt(data.recovered, 10);
                var n=x-y;
          document.getElementById("infected").innerHTML= n.toString();
            } else {
                const errorMessage = document.createElement('marquee')
                errorMessage.textContent = `Gah, it's not working!`

            }
        }

        request2.send()
        /*data*/
        function autocomplete(inp, arr) {
     /*the autocomplete function takes two arguments,
     the text field element and an array of possible autocompleted values:*/
       var currentFocus;
       /*execute a function when someone writes in the text field:*/
       inp.addEventListener("input", function (e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false; }
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
            /*check if the item starts with the same letters as the text field value:*/
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function (e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }
        });
       /*execute a function presses a key on the keyboard:*/
       inp.addEventListener("keydown", function (e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
            currentFocus++;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 38) { //up
            /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
            currentFocus--;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 13) {
            /*If the ENTER key is pressed, prevent the form from being submitted,*/
            e.preventDefault();
            if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
            }
        }
       });
     function addActive(x) {
        /*a function to classify an item as "active":*/
        if (!x) return false;
        /*start by removing the "active" class on all items:*/
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        /*add class "autocomplete-active":*/
        x[currentFocus].classList.add("autocomplete-active");
     }
     function removeActive(x) {
        /*a function to remove the "active" class from all autocomplete items:*/
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
     }
     function closeAllLists(elmnt) {
        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
     }
     /*execute a function when someone clicks in the document:*/
     document.addEventListener("click", function (e) {
        closeAllLists(e.target);
      });
      }

      /*An array containing all the country names in the world:*/
        var countries = ["USA", "BRAZIL", "RUSSIA", "INDIA", "UK", "SPAIN", "PERU", "CHILE", "ITALY", "IRAN", "MEXICO", "PAKISTAN", "TURKEY", "GERMANY", "SAUDI ARABIA", "FRANCE", "BANGLADESH", "SOUTH AFRICA", "CANADA", "QATAR", "COLOMBIA", "CHINA", "EGYPT", "SWEDEN", "BELARUS", "BELGIUM", "ARGENTINA", "ECUADOR", "INDONESIA", "NETHERLANDS", "UAE", "IRAQ", "KUWAIT", "SINGAPORE", "UKRAINE", "PORTUGAL", "OMAN", "PHILIPPINES", "POLAND", "PANAMA", "SWITZERLAND", "BOLIVIA", "DOMINICAN REPUBLIC", "AFGHANISTAN", "ROMANIA", "BAHRAIN", "IRELAND", "ARMENIA", "NIGERIA", "ISRAEL", "KAZAKHSTAN", "JAPAN", "HONDURAS", "AUSTRIA", "GUATEMALA", "GHANA", "AZERBAIJAN", "MOLDOVA", "SERBIA", "ALGERIA", "NEPAL", "S. KOREA", "DENMARK", "CAMEROON", "MOROCCO", "CZECHIA", "SUDAN", "CÔTE D'IVOIRE", "NORWAY", "MALAYSIA", "UZBEKISTAN", "AUSTRALIA", "FINLAND", "DRC", "SENEGAL", "EL SALVADOR", "MACEDONIA", "KENYA", "TAJIKISTAN", "HAITI", "ETHIOPIA", "GUINEA", "VENEZUELA", "GABON", "KYRGYZSTAN", "BULGARIA", "DJIBOUTI", "LUXEMBOURG", "MAURITANIA", "HUNGARY", "BOSNIA", "FRENCH GUIANA", "CENTRAL AFRICAN REPUBLIC", "GREECE", "THAILAND", "COSTA RICA", "SOMALIA", "CROATIA", "MAYOTTE", "ALBANIA"]

       /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
       autocomplete(document.getElementById("myInput"), countries);
           
    </script>
</body>

</html>