
<?php 
include 'partial/doctype.php';
include 'partial/header.php'; ?>





<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2710.207049454749!2d-1.5729033!3d47.2125309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805ec0fcda6c4cb%3A0xd620ca38dafa1e9a!2s2+Rue+La+Motte+Picquet%2C+44100+Nantes!5e0!3m2!1sfr!2sfr!4v1423244007186" width="100%" height="600" frameborder="0"></iframe>

<div class="container form1 grid gap">
    <div class="col-2@md">  
        <input class="form-control width-100%" type="text" name="inputFirstName" id="inputFirstName" placeholder="Destination">
    </div>
    <div class="col-2@md">
        <input class="form-control width-100%" type="date"  name="datearrivee" id="inputLastName" placeholder="Date d'arrivée">
    </div>
    <div class="col-2@md">
        <input class="form-control width-100%" type="date" name="datedepart" id="inputFirstName" placeholder="Date de départ">
        </div>
    <div class="col-2@md">
        <input class="form-control width-100%" type="text" name="inputLastName" id="inputLastName"placeholder="Taille du bateau">
    </div>
    <div class="col-2@md">
        <button type="submit" href="../views/formcreateaccount.php" class="btn btn--primary btn-xxs">RECHERCHER</button>
        </div>
</div>
    </div>
        <div class="text-center">
        <br>


        <div class="text-component margin-bottom-sm">
            <h3>Resultats de votre recherche</h3>
            <p>ou voir tous les yachts disponibles</p>
        </div>

        </div>
    </div>
    
    

    <div class="parent grid gap">
                <?php  for ($i=1; $i <9; $i++):?>
            <div class="col-2 card-v2 card-v2--blur-fx radius-md">
            <figure>
                <img class="image-bateau"src="assets/image/boat.jpg" alt="Image description">
                <figcaption class="card-v2__caption padding-sm text-center">
                <div class=" col-9 text-md text-base@md">nom du bateau - 42 mètre</div>
                <div class="col-9 margin-top-xxxs text-sm opacity-70%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum modi, eligendi magni sit dolor ab repellat provident ut commodi suscipit facilis nulla esse facere veniam, odio ratione saepe libero laudantium.</div>
                </figcaption>
            </figure><Br>
            <button class="btn btn--primary col-5" aria-controls="drawer3">book now</button>
            </div> 
                <?php endfor ;?>
    </div>
</div>



<div class="drawer drawer--modal js-drawer js-drawer--modal" id="drawer3">
  <div class="drawer__content" role="alertdialog"  aria-labelledby="drawerTitle3">
    <div class="drawer__body padding-x-md padding-y-sm js-drawer__body">
      <div class="text-component">
        <h4 id="drawerTitle3">Nom du bateau</h4>
        <p class="text">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia quidem nobis aspernatur harum ad aliquid iure. Sequi, dolor ut. Eligendi vero odio culpa tenetur eaque repellat ipsa perspiciatis et vel?
        </p>
        
        <img class="image-bateau"src="assets/image/boat.jpg" alt="Image description">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla molestiae laudantium quis et, veniam, eveniet aperiam facere dolorem iusto reiciendis veritatis dolorum nisi? Eligendi inventore nam nihil, rem dolores nulla autem repellat sunt iure omnis ullam nisi voluptatem id expedita beatae, officiis accusantium consequatur, ea dignissimos enim consequuntur odio cumque. !!!!!
        </p>
      </div>
    </div>

    <button class="reset drawer__close-btn position-fixed js-tab-focus js-drawer__close">
      <svg class="icon" viewBox="0 0 16 16" ><title>Close drawer panel</title><g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line><line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line></g></svg>
    </button>
  </div>
</div>

<?php include 'partial/footer.php'; ?>

<script src="../assets/js/components/_modal.js"></script>




















