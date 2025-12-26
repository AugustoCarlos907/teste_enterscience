import { useState } from "react";
import api from "../services/api";

function ContratacaoForm({ artista, voltar }) {
  const [nome, setNome] = useState("");
  const [cache, setCache] = useState("");
  const [dataEvento, setDataEvento] = useState("");
  const [endereco, setEndereco] = useState("");
  const [sucesso, setSucesso] = useState(false);

  function handleSubmit(e) {
    e.preventDefault();

    api.post("/contratacoes", {
      nome,
      artista_id: artista.id,
      cache,
      data_evento: dataEvento,
      endereco
    }).then(() => setSucesso(true));
  }

  if (sucesso) {
    return (
      <div className="text-center">
        <div className="alert alert-success">
          <h4>Contratação realizada com sucesso </h4>
        </div>
        <button className="btn btn-primary" onClick={voltar}>
          Nova contratação
        </button>
      </div>
    );
  }

  return (
    <div className="row justify-content-center">
      <div className="col-md-6">
        <div className="card shadow">
          <div className="card-body">
            <h3 className="text-center mb-4">
              Contratar {artista.name}
            </h3>

            <form onSubmit={handleSubmit}>
              <div className="mb-3">
                <label className="form-label">Nome *</label>
                <input className="form-control" value={nome} onChange={e => setNome(e.target.value)} />
              </div>

              <div className="mb-3">
                <label className="form-label">Artista</label>
                <input className="form-control" value={artista.name} disabled />
              </div>

              <div className="mb-3">
                <label className="form-label">Cachê</label>
                <input className="form-control" value={cache} onChange={e => setCache(e.target.value)} />
              </div>

              <div className="mb-3">
                <label className="form-label">Data do Evento *</label>
                <input type="date" className="form-control" value={dataEvento} onChange={e => setDataEvento(e.target.value)} />
              </div>

              <div className="mb-3">
                <label className="form-label">Endereço</label>
                <input className="form-control" value={endereco} onChange={e => setEndereco(e.target.value)} />
              </div>

              <div className="d-flex justify-content-between">
                <button className="btn btn-success">Confirmar</button>
                <button type="button" className="btn btn-outline-secondary" onClick={voltar}>
                  Cancelar
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  );
}

export default ContratacaoForm;
