package HandleJson;

import java.util.ArrayList;

public class Database {

	private String nome;
	private String url;
	private int porta;
	private String usuario;
	private String senha;
	private String sgbd;
	private ArrayList<Tabela> tabela;
	
	public String getNome() {
		return nome;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	public String getUrl() {
		return url;
	}
	public void setUrl(String url) {
		this.url = url;
	}

	public int getPorta() {
		return porta;
	}
	public void setPorta(int porta) {
		this.porta = porta;
	}
	public String getUsuario() {
		return usuario;
	}
	public void setUsuario(String usuario) {
		this.usuario = usuario;
	}
	public String getSenha() {
		return senha;
	}
	public void setSenha(String senha) {
		this.senha = senha;
	}
	public String getSgbd() {
		return sgbd;
	}
	public void setSgbd(String sgbd) {
		this.sgbd = sgbd;
	}
	public ArrayList<Tabela> getTabela() {
		return tabela;
	}
	public void setTabela(ArrayList<Tabela> tabela) {
		this.tabela = tabela;
	}
	


}
