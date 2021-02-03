declare(strict_types = 1);
require_once './Modal/repository/RegisterRepository.php';


class RegisterController
{
    private $databaseManager;

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;

    }

    public function render(array $get, array $post)
    {
<<<<<<< HEAD

        $error = null;
        if (isset($_POST)) {

=======
        
        $error = null;
        if (isset($_POST)) {
            
>>>>>>> 878dfa27ea30c4feb94e597b3c0a2fc851803a89
            $error = register($this->databaseManager);
            errorMessage($error);
        }
        require "View/register_profile.php";
    }
}