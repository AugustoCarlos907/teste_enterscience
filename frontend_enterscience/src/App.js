import { useState } from "react";
import ArtistasList from "./components/ArtistasList";
import ContratacaoForm from "./components/ContratacaoForm";
import ContratacoesList from "./components/ContratacoesList";

function App() {
  const [artistaSelecionado, setArtistaSelecionado] = useState(null);
  const [abaAtiva, setAbaAtiva] = useState("nova");

  return (
    <div className="bg-light min-vh-100">
      <div className="container py-4">

        <header className="text-center mb-4">
          <h1 className="fw-bold">Contratação de Artistas</h1>
          <p className="text-muted">
            Encontre artistas e contrate para o seu evento especial
          </p>
        </header>

        {/* ABAS */}
        <ul className="nav nav-tabs mb-4 justify-content-center">
          <li className="nav-item">
            <button
              className={`nav-link ${abaAtiva === "nova" ? "active" : ""}`}
              onClick={() => {
                setAbaAtiva("nova");
                setArtistaSelecionado(null);
              }}
            >
              Nova Contratação
            </button>
          </li>

          <li className="nav-item">
            <button
              className={`nav-link ${abaAtiva === "lista" ? "active" : ""}`}
              onClick={() => {
                setAbaAtiva("lista");
                setArtistaSelecionado(null);
              }}
            >
              Contratações Submetidas
            </button>
          </li>
        </ul>

        {/* CONTEÚDO DAS ABAS */}
        {abaAtiva === "nova" && (
          <>
            {!artistaSelecionado && (
              <ArtistasList onSelectArtista={setArtistaSelecionado} />
            )}

            {artistaSelecionado && (
              <ContratacaoForm
                artista={artistaSelecionado}
                voltar={() => setArtistaSelecionado(null)}
              />
            )}
          </>
        )}

        {abaAtiva === "lista" && <ContratacoesList />}

      </div>
    </div>
  );
}

export default App;
