<?php
  header('Content-type: text/css; charset:UTF-8');
?>

body {
  background-color: #E8E8E8;
}

h2 {
  background-color: #8B8D09;
  color: white;
}

.container {
  padding: 10px;
  display: grid;
  grid-template-columns: 70% 30%;
  <!-- grid-gap: 20px; -->
}

.container-bg {
  width: 66%;
}

.article-container {
  background-color: white;
  height: 100%;
}

.article-title {
  padding: 10px;
  font-size: 15px;
}

.event-container {
  background-color: #F8F8F8;
  width: auto;
}

.event-title {
  font-weight: normal;
  padding: 10px;
}

.event-card {
  padding: 5px;
  margin: 20px;
  background-color: white;
  box-shadow: 0 5px 5px -5px #333;
}

.event-card-title{
  color: #8B8D09;
  font-size: 15px;
}

.event-card-txt{
  font-size: 10px;
}


.card {
  margin: 10px;
  background-color: white;
  box-shadow: 0 5px 5px -5px #333;
}

.card-img {
  width: 100%;
}

.cards {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}

.card-content {
  height: 50px;
  overflow: scroll;
  padding: 10px;
}

.card-title {
  height: auto;
  font-size: 15px;
  padding: 5px;
  color: black;
}

.navbar {
  margin-bottom: 10px;
  box-shadow: 0 5px 5px -5px #333;
}
