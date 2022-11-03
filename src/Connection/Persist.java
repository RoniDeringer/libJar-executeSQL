package Connection;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

public class Persist {
	
	public void execute() {

		try {
			String url = new OpenConnection().createConnection()[0];
			String usuario = new OpenConnection().createConnection()[1];
			String senha = new OpenConnection().createConnection()[2];
			
			System.out.println(url);
			System.out.println(senha);
			System.out.println(usuario);
			
			Connection connection = DriverManager.getConnection(url, usuario, senha);
			Statement statement = connection.createStatement();

			String sql = new GenerateSQL().getSql();

			statement.executeUpdate(sql);
			
			statement.close();

		} catch (SQLException ex) {
			System.out.println("Erro de banco: " + ex);
		} catch (Exception e) {
			System.out.println("Erro: " + e);
		}
	}
}
