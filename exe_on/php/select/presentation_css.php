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
            min-width: 600px;
            min-height: 600px;
            border: 1px solid rgba(0,0,0,0.2);
            position: relative;
            height: 600px;
            overflow: hidden; /* Empêche l'image de dépasser la hauteur de la div */
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
        }
        textarea{
            width: 100%;
            height: 200px;
        }
    </style>