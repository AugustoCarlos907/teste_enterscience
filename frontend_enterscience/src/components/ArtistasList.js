import { useEffect, useState } from "react";
import api from "../services/api";

function ArtistasList({ onSelectArtista }) {
  const [artistas, setArtistas] = useState([]);
  const [pesquisa, setPesquisa] = useState("");
  const [tipo, setTipo] = useState("");
  const [page, setPage] = useState(1);
  const [lastPage, setLastPage] = useState(1);
  const [loading, setLoading] = useState(false);

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
      {/* PESQUISA + FILTRO */}
      <div className="row mb-4">
        <div className="col-md-6 mb-2">
          <input
            className="form-control form-control-lg"
            placeholder="Pesquisar artistas..."
            value={pesquisa}
            onChange={e => {
              setPesquisa(e.target.value);
              setPage(1);
            }}
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
          >
            <option value="">Todos</option>
            <option value="Cantor">Cantor</option>
            <option value="Banda">Banda</option>
          </select>
        </div>
      </div>

      {/* LOADING */}
      {loading && (
        <div className="text-center my-5">
          <div className="spinner-border text-primary"></div>
        </div>
      )}

      {/* LISTAGEM */}
      <div className="row g-4">
        {artistas.map(artista => (
          <div key={artista.id} className="col-sm-6 col-md-4">
            <div
              className="card h-100 shadow-sm text-center"
              style={{ cursor: "pointer" }}
              onClick={() => onSelectArtista(artista)}
            >
              <div className="card-body">
                <h5 className="fw-bold">{artista.name}</h5>
                <span className="badge bg-secondary">{artista.tipo}</span>
              </div>
            </div>
          </div>
        ))}
      </div>

      {/* PAGINAÇÃO */}
      <nav className="mt-5">
        <ul className="pagination justify-content-center">
          <li className={`page-item ${page === 1 && "disabled"}`}>
            <button className="page-link" onClick={() => setPage(page - 1)}>
              Anterior
            </button>
          </li>

          {[...Array(lastPage)].map((_, index) => (
            <li
              key={index}
              className={`page-item ${page === index + 1 && "active"}`}
            >
              <button className="page-link" onClick={() => setPage(index + 1)}>
                {index + 1}
              </button>
            </li>
          ))}

          <li className={`page-item ${page === lastPage && "disabled"}`}>
            <button className="page-link" onClick={() => setPage(page + 1)}>
              Próximo
            </button>
          </li>
        </ul>
      </nav>
    </>
  );
}

export default ArtistasList;
