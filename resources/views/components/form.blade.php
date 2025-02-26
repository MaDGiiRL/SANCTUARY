 <!-- SEZIONE FORM DI CONTATTO -->
 <section class="contact-form pt-5">
     <div class="container pt-5">
         <div class="row pb-5">
             <h5 data-aos="fade-up" class="text-center">Richiedi Informazioni</h5>
             <form method="POST" action="{{Route('submit')}}" data-aos="fade-up" data-aos-delay="100">
                 @csrf

                 <div class="form-group" data-aos="fade-up" data-aos-delay="100">
                     <label for="nome">Nome</label>
                     <input type="text" id="nome" name="name" placeholder="Inserisci il tuo nome" required>
                 </div>
                 <div class="form-group" data-aos="fade-up" data-aos-delay="200">
                     <label for="email">Email</label>
                     <input type="email" id="email" name="email" placeholder="Inserisci la tua email" required>
                 </div>
                 <div class="form-group" data-aos="fade-up" data-aos-delay="300">
                     <label for="telefono">Telefono</label>
                     <input type="text" id="telefono" name="tel" placeholder="Inserisci il tuo numero di telefono">
                 </div>
                 <div class="form-group" data-aos="fade-up" data-aos-delay="400">
                     <label for="messaggio">Messaggio</label>
                     <textarea id="messaggio" name="user_message" rows="5" placeholder="Il tuo messaggio"></textarea>
                 </div>

                 <button type="submit" class="btn btn-dark" data-aos="fade-up" data-aos-delay="500">Invia</button>
             </form>

         </div>
     </div>
 </section>

