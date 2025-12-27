import { useEffect, useState } from "react";
import api from "../services/api";
import "./ContratacoesList.css";


function ContratacoesList() {
  const [contratacoes, setContratacoes] = useState([]);
  const [erro, setErro] = useState("");
  const [page, setPage] = useState(1);
  const [lastPage, setLastPage] = useState(1);
  const [loading, setLoading] = useState(false);

  useEffect(() => {
    setLoading(true);
    api.get("/contratacoes", { params: { page, perPage: 4 } })
      .then(res => {
        setContratacoes(res.data.data);
        setLastPage(res.data.last_page || 1);
      })
      .catch(err => {
        console.log(err);
        setErro("Não foi possível carregar as contratações");
      })
      .finally(() => setLoading(false));
  }, [page]);

  if (erro) {
    return <div className="alert alert-danger">{erro}</div>;
  }

  return (
    <div>
      <h4 className="mb-4">Contratações realizadas</h4>
      {loading && (
        <div className="text-center my-5">
          <div className="loader-trend"></div>
        </div>
      )}
      {contratacoes.length === 0 && !loading && (
        <div className="text-center text-muted py-5">Nenhuma contratação encontrada.</div>
      )}
      {contratacoes.map((c, idx) => (
        <div className="contratacao-card contratacao-fade-in" style={{ animationDelay: `${idx * 0.07}s` }} key={c.id}>
          <div className="contratacao-header">
            {c.artist.foto ? (
              <img src={c.artist.foto} alt={c.artist.name} className="contratacao-avatar" />
            ) : (
              <div className="contratacao-avatar" style={{background:'#e0e7ff',display:'flex',alignItems:'center',justifyContent:'center',fontWeight:600,fontSize:'1.2rem',color:'#6366f1'}}>
                {c.artist.name[0]}
              </div>
            )}
            <div>
              <div className="contratacao-title">
                {c.artist.name}
                <span className="contratacao-badge">{c.artist.tipo}</span>
              </div>
              <div className="contratacao-info">
                Cliente: <b>{c.nome}</b>
              </div>
            </div>
          </div>
          <div className="contratacao-info">
            <span>Data do Evento: <b>{c.data_evento}</b></span>
            <span style={{marginLeft:16}}>Cachê: <b>{c.cache} R$</b></span>
          </div>
          <div className="contratacao-footer">
            <button className="btn btn-outline-secondary btn-action" onClick={() => alert(`Detalhes da contratação de ${c.artist.name}`)}>
              Detalhes
            </button>
          </div>
        </div>
      ))}

      {/* PAGINAÇÃO */}
      {lastPage > 1 && (
        <nav className="mt-5 contratacao-fade-in">
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
    </div>
  );
}

export default ContratacoesList;
