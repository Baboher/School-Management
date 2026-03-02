<?php
session_start();

if(isset($_SESSION['mat'])){ // redirige vers le dashboard si connecté
  header("Location: ../public/" . $_SESSION['acc_type'] . "_dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('../src/head.php'); ?>
        <title>Connexion</title>
    </head>
    <body class="flex items-center justify-center h-screen w-screen bg-indigo-100">
        <div class=" py-[5%] bg-sky-200 border rounded-xl place-items-center w-[95%] 2xl:size-96">
            <form action="../src/login.php" method="POST">
                <table class="h-[100%] w-full font-bebas text-[20px]">
                    <tr class="p-[10px]">
                        <td colspan="2">
                            <select class="decoration-none capitalize h-[6%] w-full text-center bg-transparent outline outline-offset-0" name="acc_type">
                                <option value="student">élève</option>
                                <option value="teacher">professeur</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-[2px] py-[5px] 2xl:p-[10px]">
                            <label for="mat">Matricule :</label>
                        </td>
                        <td>
                            <input type="text" name="mat" id="mat" class="font-sans font-normal text-base" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-[2px] py-[5px] 2xl:p-[10px]">
                            <label for="pw">Mot de Passe : </label>
                        </td>
                        <td>
                            <input type="password" name="pw" id="pw" class="font-sans font-normal text-base" required>
                        </td>
                    </tr>
                    <tr class="text-white">
                        <td colspan="2" class="px-[2px] py-[7px] 2xl:p-[10px] text-center">
                            <input type="submit" value="valider"name="login" id="login" class="capitalize w-full bg-green-300 outline outline-green-300 hover:bg-green-500 hover:outline-green-500">
                        </td>
                    </tr>

                    <?php
                        // message d'erreur

						if(isset($_POST['message'])){
                            $message = $_POST['message'];
                    ?>
                        <tr>
                            <td colspan="2" class="font-open text-[rgb(252,53,0)] text-center text-[15px]">
                                <?=$message;?>
                            </td>
                        </tr>
                    <?php
						} // fin message d'erreur
					?>
                    <tr>
                        <td colspan="2" class="p-[10px] font-open text-center text-[15px]">
                            Mot de passe oublié ? Cliquez <a href=""class="text-blue-500 underline">ici</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>