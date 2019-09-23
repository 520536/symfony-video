<?php
namespace App\Utils\AbstractClasses;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

abstract class CategoryTreeAbstract {
    
    public $categoriesArrayFromDb;
    public $categorylist;
    protected static $dbconnection;

    public function __construct(EntityManagerInterface $entitymanager, UrlGeneratorInterface $urlgenerator)
    {
        $this->entitymanager = $entitymanager;
        $this->urlgenerator = $urlgenerator;
        $this->categoriesArrayFromDb = $this->getCategories();    /*构造方法方法的总和*/
    }

    abstract public function getCategoryList(array $categories_array);

    public function buildTree(int $parent_id = null): array         /**buildTree查找下级目录 */
    {
        $subcategory = [];
        foreach($this->categoriesArrayFromDb as $category)
        {
            if($category['parent_id'] == $parent_id)
            {
                $children = $this->buildTree($category['id']);
                if($children)
                {
                    $category['children'] = $children;
                }
                $subcategory[] = $category;
            }
        }
        return $subcategory;
    }

    private function getCategories(): array         /*单例模式连接数据库*/
    {
        if(self::$dbconnection)
        {
            return self::$dbconnection;
        }
        else
        {
            $conn = $this->entitymanager->getConnection();
            $sql = "SELECT * FROM categories";
            $stmt = $conn->prepare($sql);    /*prepare()方法负责准备要执行的查询。语法格式如下： */
            $stmt->execute();         /**execute()方法负责执行准备好的查询。语法格式如下： */
            return self::$dbconnection = $stmt->fetchAll();
        }
    }

}
