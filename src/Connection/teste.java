package Connection;

import java.sql.*;

public class teste {
	public static void main(String[] args) {

		String url = "jdbc:mysql://localhost:3306/teste";
		String username = "root";
		String password = "";

		try {

			Connection connection = DriverManager.getConnection(url, username, password);
			Statement statement = connection.createStatement();

			
			String dql = "create table teste3 (coluna3 int)";

			
			statement.executeUpdate(dql);
			

		} catch (SQLException ex) {
			System.out.println("Erro de banco: "+ex);
		}
		catch (Exception e) {
			System.out.println("Erro: "+ e);
		}
	}
}
