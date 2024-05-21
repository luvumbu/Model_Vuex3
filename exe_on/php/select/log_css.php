<style>
      .remove_block{
            margin-top: 40px;
            margin-bottom: 40px;

      } 
  #add_projet {
    display: none;
  }

    .plus_element{
        margin-top: 100px;
    }
        .img_background_ {
            margin-top: 50px; 
            margin-bottom: 50px; 
            max-width: 100%;
            max-height: 100%;
            border: 1px solid rgba(0,0,0,0.2);
            position: relative;
            height: 100%;
            overflow: hidden; /* Empêche l'image de dépasser la hauteur de la div */
            background-color: black; 

        }

        .img_background_ img:hover {
            cursor: pointer;
        }

        .img_background_ img {
            max-height: 100%; /* Limite la hauteur de l'image à la hauteur de la div */
            width: auto; /* Maintient le ratio d'aspect de l'image */
            display: block; /* Évite les espaces indésirables sous l'image */
            margin: auto; /* Centre l'image horizontalement si elle est plus petite */
            position: relative;
            background-color: black; 
        }
        textarea{
            width: 100%;
            height: 200px;
            color: black;
        }
        .card h1 {
     
            text-align: center;
        
        }
    </style>

<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>