using UnityEngine;
using System.Collections;

//Handles the spawn positions for both AI and player characters

//This is attatched to the SpawnPoint prefab, to be used in the MapEditor
//Its information will be parsed as part of the map data


//WARNING the transform.position Coords must accurately reflect those
//of a valid tile





public class UnitSpawnPoint : MonoBehaviour {


	public bool bIsAISpawn;
    public int iPlayerTeamId;
    public bool bUsed;
    public Hex ParentHex;

	public int iAIUnitVaultID;

}
