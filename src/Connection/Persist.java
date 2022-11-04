package Connection;

import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

public class Persist {
	
	//posso fazer um database singleton
	
	public String getSQL() {
		String sql = "";
				
		
		
		
		return sql;
	}
	
	public void execute() {
		
		
		try {
			
			Connection connection = this.openConnection();
			
			Statement statement = connection.createStatement();
			
//			String sql = new GetSQL().getSql();
			
			String sql = "create table tabela5 (coluna5 int); create table tabela6(coluna31 int);";
			
			System.out.println(sql);
			
			statement.executeUpdate(sql);
			statement.close();

		} catch (SQLException ex) {
			System.out.println("Erro de banco: " + ex);
		} catch (Exception e) {
			System.out.println("Erro: " + e);
		}
	}
	
	
	public Connection openConnection()  {
		
		Connection connection = null;

		try {
			String url = new GetConnection().createConnection()[0];
			String usuario = new GetConnection().createConnection()[1];
			String senha = new GetConnection().createConnection()[2];
			
//			System.out.println(url);
//			System.out.println(senha);
//			System.out.println(usuario);

			connection = DriverManager.getConnection(url, usuario, "");

		} catch (IOException e) {
			System.out.println("Class Persist, method: openConnection. Error IOException: " + e);

		} catch (SQLException ex) {
			System.out.println("Class Persist, method: openConnection. Error SQLException: " + ex);
		}

		return connection;

	}
}
