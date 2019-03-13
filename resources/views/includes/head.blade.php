<!DOCTYPE html>
<html lang="fr">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> TDAH PACA - Nom de la page </title> <!-- voir avec jquery ou autre pour le modifier automatiquement -->

<!-- ajout du pop up cookies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
   window.addEventListener("load", function(){
      window.cookieconsent.initialise({
         "palette": {
            "popup": {
               "background": "#252e39"
            },
            "button": {
               "background": "#14a7d0"
            }
         },
         "theme": "classic"
      })
   });
</script>