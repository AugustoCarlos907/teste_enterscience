import { useEffect, useState } from "react";
import api from "../services/api";
import "./ArtistasList.css";

function ArtistasList({ onSelectArtista }) {
  const [artistas, setArtistas] = useState([]);
  const [pesquisa, setPesquisa] = useState("");
  const [tipo, setTipo] = useState("");
  const [page, setPage] = useState(1);
  const [lastPage, setLastPage] = useState(1);
  const [loading, setLoading] = useState(false);

  // Carregar artistas (busca normal)
  useEffect(() => {
    setLoading(true);
    api.get("/artistas", {
      params: {
        name: pesquisa,
        tipo: tipo,
        page: page,
        perPage: 6
      }
    })
      .then(res => {
        setArtistas(res.data.data);
        setLastPage(res.data.last_page);
      })
      .finally(() => setLoading(false));
  }, [pesquisa, tipo, page]);


  return (
    <>
      {/* search + filter */}
      <div className="row mb-4 fade-in">
        <div className="col-md-6 mb-2">
          <input
            className="form-control form-control-lg"
            placeholder="Pesquisar artistas..."
            value={pesquisa}
            onChange={e => {
              setPesquisa(e.target.value);
              setPage(1);
            }}
            style={{ transition: 'box-shadow 0.2s' }}
          />
        </div>

        <div className="col-md-3">
          <select
            className="form-select form-select-lg"
            value={tipo}
            onChange={e => {
              setTipo(e.target.value);
              setPage(1);
            }}
            style={{ transition: 'box-shadow 0.2s' }}
          >
            <option value="">Todos</option>
            <option value="Cantor">Cantor</option>
            <option value="Banda">Banda</option>
          </select>
        </div>
      </div>

      {/*Lazy loading */}
      {loading && (
        <div className="text-center my-5">
          <div className="loader-trend"></div>
        </div>
      )}



      <div className="row g-4 fade-in">
        {artistas.length === 0 && !loading && (
          <div className="col-12 text-center text-muted py-5 fade-in">
            Nenhum artista encontrado.
          </div>
        )} 
      {/* artist list */}
        {artistas.map((artista, idx) => (
          <div key={artista.id} className="col-sm-6 col-md-4">
            <div
              className="artist-card fade-in"
              style={{ animationDelay: `${idx * 0.08}s` }}
            >
              {/* {artista.foto && (
                <img src={artista.foto} alt={artista.name} className="artist-img" />
              )} */}
              <div className="card-body">
                <h5 className="fw-bold ms-1">{artista.name}</h5>
                <span className="badge bg-secondary">{artista.tipo}</span>
                <div className="d-flex justify-content-center gap-2 mt-3 mb-2">
                  <button className="btn btn-primary btn-sm" onClick={() => onSelectArtista(artista)}>
                    Contratar
                  </button>
                </div>
              </div>
            </div>
          </div>
        ))}
      </div>

      {/* artist pagination */}
      {lastPage > 1 && (
        <nav className="mt-5 fade-in">
          <ul className="pagination justify-content-center">
            <li className={`page-item ${page === 1 ? "disabled" : ""}`}>
              <button className="page-link" onClick={() => setPage(page - 1)}>
                Anterior
              </button>
            </li>

            {[...Array(lastPage)].map((_, index) => (
              <li
                key={index}
                className={`page-item ${page === index + 1 ? "active" : ""}`}
              >
                <button className="page-link" onClick={() => setPage(index + 1)}>
                  {index + 1}
                </button>
              </li>
            ))}

            <li className={`page-item ${page === lastPage ? "disabled" : ""}`}>
              <button className="page-link" onClick={() => setPage(page + 1)}>
                Próximo
              </button>
            </li>
          </ul>
        </nav>
      )}
    </>
  );
}

export default ArtistasList;
