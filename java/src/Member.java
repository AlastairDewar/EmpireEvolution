import java.util.*;

public class Member extends GameEngine {

	private int unique_identifier;
	private String username;
	private String password;
	private String email;
	private int latest_activity;
	private int rights;
	private int join_date;
	private ArrayList<Building> buildings;
	private ArrayList<Research> research_technologies;
	private int resources[];
	
	public Member(){
		this.buildings = new ArrayList<Building>();
		this.research_technologies = new ArrayList<Research>();
	}
	
	private int get_unique_identifier(){
		return this.unique_identifier;
	}
	
	private String get_username(){
		return this.username;
	}
	
	private void set_username(String new_username){
		this.username = new_username;
	}
	
	private boolean verify_password(String hashed_password){
		return false;
	}
	
	private void set_password(){
		
	}
	
	private String get_email(){
		return this.email;
	}
	
	private void set_email(String new_email){
		this.email = new_email;
	}
	
	private int get_latest_activity(){
		return this.latest_activity;
	}
	
	private void set_latest_activity(int new_latest_activity){
		this.latest_activity = new_latest_activity;
	}
	
	private int get_rights(){
		return this.rights;
	}
	
	private void set_rights(int new_rights){
		this.rights = new_rights;
	}
	
	private int get_join_date(){
		return this.join_date;
	}
	
	private void set_join_date(int new_join_date){
		this.join_date = new_join_date;
	}
	
	private void build_building(Building new_building){
		new_building.set_level(1);
		this.buildings.add(new_building);
	}
	
	private void demolish_building(Building old_building){
		this.buildings.remove(old_building);
	}
	
	private void set_gold(int new_gold){
		this.resources[0] = new_gold;
	}
	
	private int get_gold(){
		return this.resources[0];
	}
	
	private void set_stone(int new_stone){
		this.resources[1] = new_stone;
	}
	
	private int get_stone(){
		return this.resources[1];
	}	
	
	private void set_wood(int new_wood){
		this.resources[2] = new_wood;
	}
	
	private int get_wood(){
		return this.resources[2];
	}
	
	public void load_buildings(){
		
	}
	
	public void load_research(){
		
	}
	
	public void load_resources(){
		
	}
	
	public boolean requirement_met(Requirement subject){
		// Check it is for this object and it applies to its level etc.
		return false;
	}
}
