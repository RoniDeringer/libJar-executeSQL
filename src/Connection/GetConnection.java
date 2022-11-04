package Connection;

import java.io.IOException;
import java.sql.*;

import HandleJson.Database;
import HandleJson.GetJson;

public class GetConnection {
	
	public String[] createConnection() throws IOException {

		Database database = new GetJson().populaObjeto();
		String nomeDatabase = database.getNome();
		String usuario = database.getUsuario();
		String senha = database.getSenha();
		String url = database.getUrl();
		int porta = database.getPorta();

		String urlConnection = "jdbc:mysql://localhost:" + porta + "/" + nomeDatabase;
		String[] array = new String[3];
		
		array[0] = urlConnection;
		array[1] = usuario;
		array[2] = senha;

		return array;
	}
}
