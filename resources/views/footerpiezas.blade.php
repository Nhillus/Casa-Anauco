<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
<style>
*{
  margin: 0px;
  padding: 0px;

 }
 .line
 {
   margin:0px 0px 5px 0px;
 }
 footer
 {
   width: 100%;
   height: 240px;
   background-color: #121212;
   display: flex; 
   align-items:center;
 }
 .logo-container,.contacto
 {
   display: flex;
 }
 .logo-container
 {
   
   display:flow-root;
   flex:3;
 }
 .img-footer
 {
    width: 190px;
    height:180px;
    background:snow;
    text-align: center;
    line-height: 72px;
    font-size: 50px;
    margin: 1px 0px 0px 20px;
    display: block;
    border-radius: 30%;
    position: relative;
    overflow:hidden;
    border: 3px solid #a8a8a8;
    z-index: 1;
 }
 .logo{
  margin: 1px 0px 0px 20px;
  font-family: 'Great Vibes', cursive;
  font-size: 33px;
  font-weight:400;
  
 }
 .ask
 {
  margin: 0px 20px 10px 0px;
  justify-content: left;
  font-weight:400;
  color:whitesmoke;
  text-decoration: none;
}
 .contacto
 {
   font-weight:400;
   color:white;
   justify-content: flex-start;
   display:flow-root;
   text-decoration: none;
   flex:5;
    }

</style>


    <hr class="line">
    <footer>
      <div class="logo-container">
        <h4 class="logo">Quinta De Anauco</h4>
        <img src= {{asset ("imagenes/casalogo.png")}} alt ="logo"class="img-footer" alt="Cinque Terre" width="150" height="175" > 
      </div>
      
      <li class="contacto">
          <h5 class="ask">¿Interesado en visitarnos? </h5>
          <h6>San Bernandino,</h6>
          <h6>Casa anauco</h6>
          <h6>Museo de arte colonial</h6>
          <h6>Tlf:0212-625-53-22</h6>
          <h6>Caracas-Venezuela.</h6>
          <h6>RIF: J-30435448-7 </h6>    
      </li>
    </footer>
