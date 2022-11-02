<h3><?= $data['title']; ?></h3>

<form action="<?= URLROOT; ?>/richerpeople/create" method="post">
    <table>
        <tbody>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Networth</td>
                <td><input type="text" name="Networth" id="Networth"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age" id="age"></td>
            </tr>
            <tr>
                <td>MyCompany</td>
                <td><input type="text" name="mycompany" id="mycompany"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit" value="verstuur"></td>
            </tr>
        </tbody>
    </table>
</form>