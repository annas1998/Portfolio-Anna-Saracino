<x-layout>
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <x-navbar-component />
            <!-- Page content-->
            <section class="py-5">
            <div class="container py-4">
  <form method="POST" action="{{ route('submit.contact') }}">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nome</label>
      <input class="form-control" type="text" name="name" placeholder="Nome" value="{{ old('name') }}" required />
    </div>

    <div class="mb-3">
      <label class="form-label">Telefono</label>
      <input class="form-control" type="number" name="phone" placeholder="Telefono" value="{{ old('phone') }}" />
    </div>

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
    </div>

    <div class="mb-3">
      <label class="form-label">Messaggio</label>
      <textarea class="form-control" name="message" type="text" placeholder="Messaggio" style="height: 10rem;" required>{{ old('message') }}</textarea>
    </div>

    <div class="d-grid">
      <button class="btn btn-primary btn-lg" type="submit">Invia</button>
    </div>
  </form>
</div>

            </section>
        </main>
        <!-- Footer-->
        <x-footer-component />
       </x-layout>
