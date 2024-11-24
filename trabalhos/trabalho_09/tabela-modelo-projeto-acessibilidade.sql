--criando o banco de dados--
Create DataBase BancodeDeDadosTestes
go

--Acessando o Banco de dados BancodeDeDadosTestes

Use BancodeDeDadosTestes
go


--Criando a tabela Artistas
Create Table Artistas
(Id int identity (1,1) Primary Key,
ImgAutor VarChar (255) Not Null,
NomeAutor VarChar (255) Not Null,
AriaLabel VarChar (255) Not Null,
LinkParaPaginaDoArtista  VarChar (255) Not Null,
)
go


insert into Artistas (ImgAutor, NomeAutor, AriaLabel, LinkParaPaginaDoArtista)
Values ('img/Rubens/rubens.png',
         'Rubens Menezes',
		 'Leia mais Sobre Rubens Menezes',
		 'art_rubens.php')




Insert Into Artistas (ImgAutor, NomeAutor, AriaLabel, LinkParaPaginaDoArtista)
Values ('img/Jefferson_costa/perfil.png',
         'Jeferson Costa',
		 'Leia mais Sobre Jeferson costa',
		 'art_jef_costa.php')



Insert Into Artistas (ImgAutor, NomeAutor, AriaLabel, LinkParaPaginaDoArtista)
Values ('img/kiko_garcia/perfil.jpg',
         'Kiko Garcia',
		 'Leia mais Sobre Kiko Garcia',
		 'art_kiko_garcia.php')


Insert Into Artistas (ImgAutor, NomeAutor, AriaLabel, LinkParaPaginaDoArtista)
Values ('img/digo_freitas/perfil.jpg',
         'Digo Freitas',
		 'Leia mais Sobre Digo Freitas',
		 'art_digo_freitas.php')



Insert Into Artistas (ImgAutor, NomeAutor, AriaLabel, LinkParaPaginaDoArtista)
Values ('img/vivi_melancia/perfil.png',
         'Vivi Melancia',
		 'Leia mais Sobre Vivi Melancia',
		 'art_vivi_melancia.php')


Insert Into Artistas (ImgAutor, NomeAutor, AriaLabel, LinkParaPaginaDoArtista)
Values ('img/esteves/perfil.png',
         'Daniel Esteves',
		 'Leia mais Sobre Daniel Esteves',
		 'art_daniel_esteves.php')







