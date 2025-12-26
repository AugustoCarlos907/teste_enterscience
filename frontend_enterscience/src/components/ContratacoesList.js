import { useEffect, useState } from "react";
import api from "../services/api";

function ContratacoesList() {
  const [contratacoes, setContratacoes] = useState([]);
  const [erro, setErro] = useState("");

  useEffect(() => {
    api.get("/contratacoes")
      .then(res => setContratacoes(res.data.data))
      .catch(err => {
        console.log(err);
        setErro("Não foi possível carregar as contratações");
      });
  }, []);

  if (erro) {
    return <div className="alert alert-danger">{erro}</div>;
  }

  return (
    <div className="card shadow">
      <div className="card-body">
        <h4 className="mb-3">Contratações realizadas</h4>

        <table className="table table-striped">
          <thead>
            <tr>
              <th>Cliente</th>
              <th>Artista</th>
              <th>Data do Evento</th>
              <th>Cachê</th>
            </tr>
          </thead>
          <tbody>
            {contratacoes.map(c => (
              <tr key={c.id}>
                <td>{c.nome}</td>
                <td>{c.artist.name}</td>
                <td>{c.data_evento}</td>
                <td>{c.cache} R$</td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default ContratacoesList;
