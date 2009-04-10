
public class Requirement {

	private int unique_identifier;
	// The type of requirement i.e. Building/Research/Resource
	private String object_type;
	// The unique identifier for the object
	private int object_unique_identifier;
	// The required level for that object
	private int object_level;
	
	private String requirement_object_type;
	private int requirement_object_unique_identifier;
	private int requirement_object_level;
	
	// Require 100 gold to upgrade building #1 to level 2
	// new Requirement('BUI','1','2','GOL', NULL, '100')
	public Requirement(String object_type, int object_id, int object_level, String requirement_object_type, int requirement_object_unique_identifier, int requirement_object_level) {
		
	}
	
}