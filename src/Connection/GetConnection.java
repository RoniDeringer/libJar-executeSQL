package Connection;

import HandleJson.ChoiceDatabase;
import java.io.IOException;
import java.sql.*;

import HandleJson.Database;
import HandleJson.GetJsonMysql;

public class GetConnection {
	
	public String[] createConnection() throws IOException {

		Database database = new ChoiceDatabase().ChoiceDatabase();
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
