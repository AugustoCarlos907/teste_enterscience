import { useState } from "react";
import ArtistasList from "./components/ArtistasList";
import ContratacaoForm from "./components/ContratacaoForm";

function App() {
  const [artistaSelecionado, setArtistaSelecionado] = useState(null);

  return (
    <div className="bg-light min-vh-100">
      <div className="container py-4">
        
        <header className="text-center mb-4">
          <h1 className="fw-bold"> Contratação de Artistas</h1>
          <p className="text-muted">
            Encontre artistas e contrate para o seu evento especial
          </p>
        </header>

        {!artistaSelecionado && (
          <ArtistasList onSelectArtista={setArtistaSelecionado} />
        )}

        {artistaSelecionado && (
          <ContratacaoForm
            artista={artistaSelecionado}
            voltar={() => setArtistaSelecionado(null)}
          />
        )}

      </div>
    </div>
  );
}

export default App;
