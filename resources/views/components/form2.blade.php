<h6 class="text-center">Prenota il tuo trattamento</h6>

<form method="POST" action="{{route('submit2')}}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome e Cognome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il tuo nome" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Telefono</label>
        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Inserisci il tuo telefono" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Inserisci la tua email" required>
    </div>
    <div class="mb-3">
        <label for="service" class="form-label">Seleziona un servizio</label>
        <select class="form-select" id="service" name="mess" required>
            <option value="">-- Seleziona un servizio --</option>
            <option value="Nails and Feet">Nails and Feet</option>
            <option value="Facial Treatment">Facial Treatment</option>
            <option value="Body Treatment">Body Treatment</option>
            <option value="Epilation">Epilation</option>
            <option value="Laser">Laser</option>
            <option value="Solarium">Solarium</option>
            <option value="Piercings">Piercings</option>
            <option value="Brows and Lashes">Brows and Lashes</option>
            <option value="Make-Up">Make-Up</option>
            <option value="Hair">Hair</option>
            <option value="PMU">PMU</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Seleziona una data</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <div class="mb-3">
        <label for="time" class="form-label">Seleziona un orario</label>
        <input type="time" class="form-control" id="time" name="time" required>
    </div>
    <button type="submit" class="btn btn-dark fs-5 w-100">Prenota</button>
</form>