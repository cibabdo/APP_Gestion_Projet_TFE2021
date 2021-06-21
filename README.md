### APP_Gestion_Projet
TFE 2021 - ABIUSO DONATO

A new Symfony 5 project + Ajax + Bootstrap + Json + php

SDK Visual Studio Code

========================

### SERVICE

- PDF :arrow_right: dompdf :arrow_right: https://github.com/dompdf/dompdf<br/>
   
- Mailer :arrow_right: Symfony Bundle


### WWW - CLOUD

Version en ligne chez LWS
=> la loose => erreur 500 depuis dimanche :'(

http://www.abiusodtfe2021.be/

Accès lws -> Voir mail Mr Beck

Version sur serveur privé

http://tfe2021abiusod.dyndns-web.com:8000 

Code source sur Github
https://github.com/cibabdo/APP_Gestion_Projet_TFE2021


<h3 id="TODO">0. TODO List </h3>
<table>
<tr>
<th>To Do</th><th>Etat</th>
</tr>
<tr><td>Contact admin</td><td>:x:</td></tr>
<tr><td>Password perdu ou erroné</td><td>:x:</td></tr>
<tr><td>Créer compte via API Google Mail</td><td>:x:</td></tr>
<tr><td>Edition Planning</td><td>:x:</td></tr>
<tr><td>Permission sur champ suivant Type de compte utilisateur</td><td>:x:</td></tr>
</table>
<h3 id="user">1. Utilisateur </h3>
<table>
<tr>
<th>Utilisateur admin</th>
</tr>
<tr><td>Lors de la mise en ligne pas d'utilisateur "admin" une route "url/test" existe pour créer un "admin".</td>
<td>Attention !!!! modifier le fichier Controller/InvitationController.php et editer la fonction test en ligne 165</td>
<td>$user->setUsername('prénom');</td>
<td>$user->setEmail('adresse email du compte');</td>
<td>:no_entry: A bloquer une fois le compte créer (problème de sécurité)</td>
<tr><th>Login</th><th>Password</th><th>Rôle</th></tr>
    <tr><td>prof@isl.be</td><td>test1234</td><td>Admin</td></tr>
    <tr><td>prof2@isl.be</td><td>test1234</td><td>Interne</td></tr>
</table>
<h3 id="etat">2. Fonction:</h3>
<table>
    <tr><th>Administration</th><th>Etat</th><th>Remarques</th></tr>
    <tr><td>Gestion sites</td><td>:white_check_mark:</td></tr>
    <tr><td>Gestion activitésentreprises</td><td>:white_check_mark:</td></tr>
    <tr><td>Gestion entreprises</td><td>:white_check_mark:</td></tr>
    <tr><td>Gestion type bureaux études</td><td>:white_check_mark:</td></tr>
    <tr><td>Gestion bureaux études</td><td>:white_check_mark:</td></tr>
    <tr><td>Gestion personnes externes</td><td>:white_check_mark:</td></tr>
    <tr><td>Gestion travaux</td><td>:white_check_mark:</td></tr>
    <tr><td>Gestion utilisateurs</td><td>:white_check_mark:</td></tr>
    <br/>
    <tr><th>Projet</th><th>Etat</th><th>Remarques</th></tr>
    <tr><td>Gestion des chantier</td><td>:white_check_mark:</td></td></tr>
    <tr><td>Gestion Création Planning</td><td>:white_check_mark:</td><td>Sauf edit / couleur</td></tr>
    <tr><td>Gestion Invitation user externe</td><td>:white_check_mark:</td><tr>
    <tr><td>Validité token + Effacement token</td><td>:white_check_mark:</td><tr>
    <tr><td>Gestion documents</td><td>:white_check_mark:</td><tr>
    <tr><td>Gestion Requêtes</td><td>:white_check_mark:</td><tr>
    <tr><td>Gestion pdf des Requêtes</td><td>:white_check_mark:</td><tr>
    <tr><td>Gestion Statistiques</td><td>:white_check_mark:</td><tr>
    <tr><td>Gestion backup</td><td>:x:</td><td>En cours</td><tr>
    <br/>
</table>


## Rapport

Dans répertoire TFE_Rapport -> racine du répo

<table>
    <tr><th>Raport</th><th>Etat</th><th>Remarques</th></tr>
    <tr><td>Gestion Chantier Final.docx</td><td>:white_check_mark:</td></tr>
</table>
 



