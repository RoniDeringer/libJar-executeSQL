package Connection;

import java.sql.Connection;
import java.sql.PreparedStatement;

import HandleJson.Database;

public class DatabaseDAO {

	Connection conn;
	PreparedStatement pstm;
	
	public void insertData(Database database) {
		String dql = "create table teste2(coluna2 int);";
	}
	
}
