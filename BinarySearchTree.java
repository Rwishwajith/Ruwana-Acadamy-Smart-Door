public class BinarySearchTree{
public static Node root;
public BinarySearchTree()
{
    this.root=null;
}
public void insert(int id)
{
    Node newNode=new Node(id);
    if(root==null)
    {
        root=newNode;
        return;
    }
    Node current = root;
    Node parent = null;
    while (true)
    {
        parent = current;
        if(id<current.data)
        {
            current=current.left;
            if(current==null)
            {
                parent.left=newNode;
                return;
            }
        
        }
        else
        {
            current= current.right;
            if(current==null)
            {
                parent.right=newNode;
                return;
            }
            
        }
        
    }
    
}
public void display(Node root)
{
    if(root!=null)
    {
        display(root.left);
        System.out.print(""+ root.data);
        display(root.right);
    }
}
   
public static void main (String arg[])
{
    BinarySearchTree b= new BinarySearchTree();
    b.insert(3);b.insert(8);
     b.insert(1);b.insert(4); b.insert(6);b.insert(2); b.insert(10);b.insert(9);
      b.insert(20);b.insert(25); b.insert(15);b.insert(16);
      System.out.println("Original Tree");
      b.display(b.root);
      System.out.println("");
}
}
class Node
{
    int data;
    Node left;
    Node right;
    public Node(int data)
    {
        this.data = data;
        left= null;
        right= null;
    }
}