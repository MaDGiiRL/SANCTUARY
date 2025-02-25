 <!-- SEZIONE FORM DI CONTATTO -->
 <section id="contatti" class="contact-form">
     <div class="container ">
         <div class="row">
             <h5 data-aos="fade-up" class="text-center">Richiedi Informazioni</h5>
             <form action="submit.php" method="post" data-aos="fade-up" data-aos-delay="100">
                 <div class="form-group">
                     <label for="nome">Nome</label>
                     <input type="text" id="nome" name="nome" placeholder="Inserisci il tuo nome" required>
                 </div>
                 <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" id="email" name="email" placeholder="Inserisci la tua email" required>
                 </div>
                 <div class="form-group">
                     <label for="telefono">Telefono</label>
                     <input type="text" id="telefono" name="telefono" placeholder="Inserisci il tuo numero di telefono">
                 </div>
                 <div class="form-group">
                     <label for="messaggio">Messaggio</label>
                     <textarea id="messaggio" name="messaggio" rows="5" placeholder="Il tuo messaggio"></textarea>
                 </div>

                 <button type="submit" class="btn btn-dark">Invia</button>

             </form>

         </div>
     </div>
 </section>