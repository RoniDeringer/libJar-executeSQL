package HandleJson;

public class ModelJson {

	private String nome;

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	@Override
	public String toString() {
		StringBuilder builder = new StringBuilder();
		builder.append("GetJson [nome=");
		builder.append(nome);
		builder.append("]");
		return builder.toString();
	}
}
