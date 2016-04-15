using UnityEngine;
using System.Collections;

public class PrefabLibrary : MonoBehaviour
{

    public static PrefabLibrary Instance ;
	public GameObject GameCamera;
	public GameObject[] Tiles;
	public GameObject[] Props;
    //tmp
    public GameObject[] UnitPrefabs;

    void Start()
    {
        Instance = this;
    }
}
